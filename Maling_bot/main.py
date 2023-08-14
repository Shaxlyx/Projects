import asyncio
from aiogram import Bot, Dispatcher, executor, types

from config import BOT_TOKEN, admin_id
from db import Database

from asyncio import sleep
from maling import bot_mailing
from aiogram.dispatcher import FSMContext
from aiogram.types import InlineKeyboardMarkup, InlineKeyboardButton
from aiogram.contrib.fsm_storage.memory import MemoryStorage


loop = asyncio.new_event_loop()
bot = Bot(BOT_TOKEN, parse_mode='HTML')
dp = Dispatcher(bot, loop=loop, storage=MemoryStorage())
db = Database('db.db')

@dp.message_handler(commands=['start'])
async def start(message: types.Message):
    if not db.user_exists(message.from_user.id):
            db.add_user(message.from_user.id)
    await bot.send_message(message.from_user.id, 'Вас приветствует Барбулда!')
    if message.from_user.id == admin_id:
        kb = [
            [types.KeyboardButton(text="Добавить напоминание")],
        ]
        keyboard = types.ReplyKeyboardMarkup(keyboard=kb, resize_keyboard=True)
        await message.answer("Выберите действие!", reply_markup=keyboard)

@dp.message_handler(lambda message: message.text == "Добавить напоминание")
async def one_action(message: types.Message):
    await message.answer("Введите текст:", reply_markup=types.ReplyKeyboardRemove())
    await bot_mailing.text.set()

@dp.message_handler(state=bot_mailing.text)
async def text_action(message: types.Message, state: FSMContext):
    answer = message.text
    markup = InlineKeyboardMarkup(row_width=2,
                                  inline_keyboard=[
                                      [
                                          InlineKeyboardButton(text='Добавить фотографию', callback_data='add_photo'),
                                          InlineKeyboardButton(text='Далее', callback_data='next'),
                                          InlineKeyboardButton(text = 'Отменить', callback_data='quit')
                                      ]
                                  ])
    await state.update_data(text=answer)
    await message.answer(text=answer, reply_markup=markup)
    await bot_mailing.state.set()

@dp.callback_query_handler(text='next', state = bot_mailing.state)
async def startmal(call: types.CallbackQuery, state: FSMContext):
    users = db.get_users()
    data = await state.get_data()
    text = data.get('text')
    await state.finish()
    for user in users:
        try:
            await bot.send_message(user[-1], text=text)
            await sleep(0.33)
        except Exception:
            pass
    kb = [
            [types.KeyboardButton(text="Добавить напоминание")],
        ]
    keyboard = types.ReplyKeyboardMarkup(keyboard=kb, resize_keyboard=True)
    await call.message.answer('Рассылка выполнена', reply_markup=keyboard)

@dp.callback_query_handler(text='add_photo', state=bot_mailing.state)
async def add_photomal(call: types.CallbackQuery):
    await call.message.answer('Жду фото')
    await bot_mailing.photo.set()


@dp.message_handler(state=bot_mailing.photo, content_types=types.ContentType.PHOTO)
async def maling_text(message: types.Message, state: FSMContext):
    photo_file_id = message.photo[-1].file_id #возвращает file_id фотографии с наилучшим разрешением
    await state.update_data(photo=photo_file_id)
    data = await state.get_data()
    text = data.get('text')
    photo = data.get('photo')
    markup = InlineKeyboardMarkup(row_width=2,
                                  inline_keyboard=[
                                      [
                                          InlineKeyboardButton(text='Далее', callback_data='next'),
                                          InlineKeyboardButton(text='Отменить', callback_data='quit')
                                      ]
                                  ])
    await message.answer_photo(photo=photo, caption=text, reply_markup=markup)

@dp.callback_query_handler(text='next', state=bot_mailing.photo)
async def startmal2(call:types.CallbackQuery, state: FSMContext):
    users = db.get_users()
    data = await state.get_data()
    text = data.get('text')
    photo = data.get('photo')
    await state.finish()
    for user in users:
        try:
            await bot.send_photo(user[-1], photo=photo, caption=text)
            await sleep(0.33)
        except Exception:
            pass
    kb = [
            [types.KeyboardButton(text="Добавить напоминание")],
        ]
    keyboard = types.ReplyKeyboardMarkup(keyboard=kb, resize_keyboard=True)
    await call.message.answer('Рассылка выполнена', reply_markup=keyboard)

@dp.message_handler(state=bot_mailing.photo)
async def no_photo(message: types.Message):
    markup = InlineKeyboardMarkup(row_width=2,
                                  inline_keyboard=[
                                      [
                                          InlineKeyboardButton(text = 'Отменить', callback_data='quit')
                                      ]
                                  ])
    await message.answer('Пришлите фото', reply_markup=markup)

@dp.callback_query_handler(text='quit', state=[])
async def quit(call: types.CallbackQuery, state:FSMContext):
    await state.finish()
    kb = [
            [types.KeyboardButton(text="Добавить напоминание")],
        ]
    keyboard = types.ReplyKeyboardMarkup(keyboard=kb, resize_keyboard=True)
    await call.message.answer('Рассылка отменена', reply_markup=keyboard)


if __name__ == '__main__':
    executor.start_polling(dp, skip_updates=True)
