import asyncio
from asyncio import sleep

from aiogram import Bot, Dispatcher, executor, types
import random
from config import BOT_TOKEN, admin_id
from db import Database
from markups import mainMenu
from states import Buy
from aiogram.dispatcher import FSMContext
from aiogram.contrib.fsm_storage.memory import MemoryStorage

bot = Bot(BOT_TOKEN, parse_mode='HTML')

dp = Dispatcher(bot, storage=MemoryStorage())
db = Database('db.db')

@dp.message_handler(commands=['start'])
async def start(message: types.Message, state: FSMContext):
    if not db.user_exists(message.from_user.id):
        db.add_user(message.from_user.id, message.from_user.username)
    await bot.send_message(message.from_user.id, 'Хай пиздюк ', reply_markup=mainMenu)

@dp.message_handler(lambda message: message.text == "Расклад на ТРИ карты")
async def three(message: types.Message, state: FSMContext):
    await bot.send_photo(message.from_user.id, caption='Этот расклад является <b>универсальным.</b>\nЕго можно использовать при гадание <b>на ситуацию, на будущее и на любовь.</b>\n'
                                                       '<b>Первая карта</b> означает прошлое или то, с чего все началось\n<b>Вторая карта</b> говорит о настоящем и о том, на что нужно обратить внимание сейчас\n'
                                                       '<b>Третья карта</b> дает возможность заглянуть в будущее.', photo=f'AgACAgIAAxkBAAICpWShn2Z-r-hDwQF6aWD5s9KcJFf2AAKTzTEbXo4QSb4j-u-mNUMeAQADAgADeQADLwQ')
    await sleep(1)
    carts = db.old_cart_name()
    ran_carts = random.sample(carts, 3)
    for i in ran_carts:
        await sleep(0.4)
        await bot.send_photo(message.from_user.id, caption=f'<b>{i[:][1]}</b>\n\n<i>{i[:][2]}</i>', photo=f'{i[:][3]}')



@dp.message_handler(lambda message: message.text == "Подкова")
async def podkova(message: types.Message):
    await bot.send_photo(message.from_user.id, caption='Расклад используется для <b>трактовки нынешнего положения дел.</b> Он дает возможность сориентироваться в том, что происходит в настоящее время, '
                                                       'и позволяет предусмотреть приближающиеся трудности, чтобы с ними было легче справится, а в каких-то случаях и вообще избежать.\n\n'
                                                       '1 карта - влияние прошлого на настоящее\n2 карта - текущая ситуация\n3 карта - развитие событий в дальнейшем\n4 карта - как нужно поступить\n'
                                                       '5 карта - влияние обстоятельств на ситуацию\n6 карта - возможные трудности\n7 карта - конечный итог', photo='AgACAgIAAxkBAAICqWShn9R8tT8qP3SNwM3BS1a_qNHKAAKVzTEbXo4QScd3FdmCbRjiAQADAgADeQADLwQ')
    await sleep(1)
    carts = db.cart_name()
    ran_carts = random.sample(carts, 7)
    for i in ran_carts:
        await sleep(0.4)
        await bot.send_photo(message.from_user.id, caption=f'<b>{i[:][1]}</b>\n\n<i>{i[:][2]}</i>', photo=f'{i[:][3]}')

@dp.message_handler(lambda message: message.text == "Обретение Любви")
async def love(message: types.Message):
    await bot.send_photo(message.from_user.id, caption='Этот расклад не только расскажет <b>о перспективах в отношениях</b>, но и покажет <b>возможные проблемы</b>, а так же даст <b>совет, как их избежать.</b> '
                                                       'Его можно использовать и при гадание о только начинающих отношениях, когда еще нет уверенности и четких представлений.\n\n'
                                                       '1 карта - тот, кто встретится\n2 карта - его/её чувства к вам\n3 карта - возможные проблемы\n4 карта - место партнера в социуме\n5 карта - сексуальная совместимость\n'
                                                       '6 карта - эмоциональная совместимость\n7 карта - что вас может разъединить\n8 карта - перспективы в материальном плане\n9 карта - как можно завоевать партнера\n\n'
                                                       , photo='AgACAgIAAxkBAAICrmShoDRqlxe98bcSW6AO38W5HmjrAAKWzTEbXo4QSU_6vaGdEv9cAQADAgADeQADLwQ')
    await bot.send_message(message.from_user.id, '<b>Советы по толкованию</b>\nВ этом раскладе некоторые позиции нужно рассматривать с разных сторон. <b>Карта 2</b> - <i>показатель отношения (дружба, любовь, родные чувства). </i>'
                                                    'Любовь может быть глубокой или мимолетной. Это же можно сказать по <b>картам 3 и 8.</b>\n<b>Позиция 9</b> интерпретируется, если для спрашивающего это важно, т.к. в процессе гадания он может '
                                                    'отказаться от желания общения с новым знакомым. Если расклад производится на отношения, которые уже начались, чтобы узнать их будущее, эта позиция говорит о слабостях партнера.')
    await sleep(1)
    carts = db.cart_name()
    ran_carts = random.sample(carts, 9)
    for i in ran_carts:
        await sleep(0.4)
        await bot.send_photo(message.from_user.id, caption=f'<b>{i[:][1]}</b>\n\n<i>{i[:][2]}</i>', photo=f'{i[:][3]}')

@dp.message_handler(lambda message: message.text == "Кельтский Крест")
async def krest(message: types.Message):
    await bot.send_photo(message.from_user.id, caption='В этом раскладе используются только старшие арканы. Он подходит для <b>ознакомления с личностью человека,</b> на которого гадают, и получения точных характеристик '
                                                       'этапа жизни, на котором он находится. Перед гаданием <b>необходимо определить временные рамки событий,</b> о которых вы хотите получить информацию.\n\n'
                                                       '1 карта - сознание\n2 карта - душа\n3 карта - противоречие в душе\n4 карта - подсознание\n5 карта - прошлое\n6 карта - будущее\n7 карта - отношение к самому себе\n'
                                                       '8 карта - отношение к окружающим\n9 карта - надежды и опасения\n10 карта - перспективы и результаты', photo='AgACAgIAAxkBAAICs2ShoFzrND7_ybZV39GZvpexSheTAAKXzTEbXo4QSRqsEjsmeiBrAQADAgADeAADLwQ')
    await sleep(1)
    carts = db.cart_name()
    ran_carts = random.sample(carts, 10)
    for i in ran_carts:
        await sleep(0.4)
        await bot.send_photo(message.from_user.id, caption=f'<b>{i[:][1]}</b>\n\n<i>{i[:][2]}</i>', photo=f'{i[:][3]}')

@dp.message_handler(lambda message: message.text == "Доб")
async def add_photo(message: types.Message):
    await message.answer('Кинь имя')
    await Buy.r1.set()

@dp.message_handler(state=Buy.r1)
async def name(message: types.Message, state: FSMContext):
    name = message.text
    await state.update_data(name=name)
    await bot.send_message(message.from_user.id, 'Кинь значение')
    await Buy.r2.set()

@dp.message_handler(state=Buy.r2)
async def znach(message: types.Message, state: FSMContext):
    direct = message.text
    await state.update_data(direct=direct)
    await bot.send_message(message.from_user.id, 'Кинь фото')
    await Buy.r3.set()

@dp.message_handler(state=Buy.r3, content_types=types.ContentType.PHOTO)
async def photo(message: types.Message, state: FSMContext):
    photo_file_id = message.photo[-1].file_id #возвращает file_id фотографии с наилучшим разрешением
    data = await state.get_data()
    name = data.get('name')
    direct = data.get('direct')
    db.add_cart(name, direct, photo_file_id)
    await state.finish()
    await bot.send_message(message.from_user.id, 'Готово!', reply_markup=mainMenu)
    # await bot.send_message(message.from_user.id, text=f'{photo_file_id}')


if __name__ == '__main__':
    executor.start_polling(dp, skip_updates=True)
