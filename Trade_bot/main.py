import asyncio
from aiogram import Bot, Dispatcher, executor, types
from config import BOT_TOKEN, admin_id, REVIEW_CHANNEL
from db import Database
from markups import mainMenu, keyboard, rust, solution, madina, ans, adminlink, feedback, nodemo, otziv
from states import Buy, Answer, Sub, Add, Del, Ch
from aiogram.dispatcher import FSMContext
from aiogram.contrib.fsm_storage.memory import MemoryStorage
from aiogram.types import ReplyKeyboardMarkup, InlineKeyboardButton, KeyboardButton, InlineKeyboardMarkup

from apscheduler.schedulers.asyncio import AsyncIOScheduler
from datetime import datetime, timedelta

loop = asyncio.new_event_loop()
bot = Bot(BOT_TOKEN, parse_mode='HTML')

dp = Dispatcher(bot, loop=loop, storage=MemoryStorage())
db = Database('db.db')

@dp.message_handler(commands=['start'], state='*')
async def start(message: types.Message, state: FSMContext):
    await state.finish()
    if message.from_user.id == admin_id:
        await bot.send_message(message.from_user.id, 'Выберите действие!', reply_markup=adminlink)
    else:
        await bot.send_message(message.from_user.id, 'Доброго времени суток!👋\nВ данном боте вы сможете найти актуальную информацию о большом сборнике вип групп.\nНапример, узнать текущие тарифы, оплатить или продлить доступ, а также получить ответы на популярные вопросы.\nМЫ даем Вам возможность, сэкономить до 15.000$ ежемесячно 🤑', reply_markup=mainMenu)

#####ADMIN_PANEL#####
@dp.message_handler(lambda message: message.text == "Изменить ссылку")
async def add_link(message: types.Message):
    link = db.ch()
    await bot.send_message(message.from_user.id, f'Прошлая ссылка: {link[0]}')
    await bot.send_message(message.from_user.id, 'Отправьте мне ссылку', reply_markup=None)
    await Add.l1.set()

@dp.message_handler(state=Add.l1)
async def link(message: types.Message, state: FSMContext):
    link = message.text
    db.add_link(link)
    await bot.send_message(message.from_user.id, f'На данном моменте ссылка выглядит вот так: {link}', reply_markup=adminlink)
    await state.reset_state(with_data=False)

@dp.message_handler(lambda message: message.text == "Удалить пользователя")
async def del_user(message: types.Message):
    await bot.send_message(message.from_user.id, 'Введите id пользователя которого нужно удалить:', reply_markup=None)
    await Del.d1.set()

@dp.message_handler(state=Del.d1)
async def delete_us(message: types.Message, state: FSMContext):
    del_id = message.text
    channel = db.channel_name()
    try:
        for i in channel:
            await bot.kick_chat_member(i[:][2], del_id)
            await bot.unban_chat_member(i[:][2], del_id)
    except:
        pass
    await bot.send_message(message.from_user.id, f'Вы успешно удалили пользователя со всех каналов')
    await state.reset_state(with_data=False)

@dp.message_handler(lambda message: message.text == "Добавить канал")
async def add_ch(message: types.Message):
    await bot.send_message(message.from_user.id, 'Введи имя канала:', reply_markup=None)
    await Ch.c1.set()

@dp.message_handler(state=Ch.c1)
async def chan(message: types.Message, state: FSMContext):
    channel = message.text
    await state.update_data(channel=channel)
    await bot.send_message(message.from_user.id, 'Введи id канала:', reply_markup=None)
    await Ch.c2.set()

@dp.message_handler(state=Ch.c2)
async def idchan(message: types.Message, state: FSMContext):
    id_ch = message.text
    data = await state.get_data()
    name = data.get('channel')
    db.add_channel(name, id_ch)
    await bot.send_message(message.from_user.id, 'Вы успешно добавили канал', reply_markup=None)
    await state.finish()
#####/ADMIN_PANEL#####

@dp.message_handler(lambda message: message.text == "⁉️FAQ", state='*')
async def faq(message: types.Message, state: FSMContext):
    await state.finish()
    await bot.send_message(message.from_user.id, 'Часто задаваемые вопросы:\n'
                           '1. Кто мы такие? Почему нам можно доверять?\nМЫ самая большая складчина СНГ, которая дает доступ одновременно к более 50 VIP каналам различных трейдеров/блогеров.\n'
                           '2. В какие вип группы будет доступ?\nВсе группы вы можете посмотреть в боте, нажав на кнопку: «VIPки». Их очень много😁\n'
                           '3. У вас есть задержка при пересылке информации?\nНаш бот отправляет всю информацию автоматически, задержки на получение информации сведены к минимуму. ⏳\n'
                           '4. Предоставляете ли вы учебные материалы?\nРяд курсов мы даем бонусом по запросу тем, кто приобрел нашу подписку на срок 3 или 6 месяцев. 📚\n'
                           '5. Какая цена подписки, какие есть тарифы и как ее оформить?\nНа данный момент у нас три тарифы:\n'
                           '🔹1 месяц - 70$\n🔹3 месяца - 160$\n🔹1 год - 450$\n'
                           'Найти подробную информацию и купить подписку можно в этом боте в пункте "Тарифы".\n'
                           '6. Я новичок, не знаю с чего начать обучение и как торговать, что посоветуете?\nВам нужно оплатить тариф 3/6 месяцев, и вам будет предоставлен обучающий материал. Вы сможете связаться с нашей поддержкой и они смогут вас проконсультировать.\n'
                           '7. Как я могу связаться с вами, если у меня остались вопросы?\nНаши администраторы всегда готовы помочь вам, пишите сюда:\n@cryptohouse_adm', reply_markup=mainMenu)

@dp.message_handler(lambda message: message.text == "VIP Каналы", state='*')
async def faq(message: types.Message, state: FSMContext):
    await state.finish()
    channel = db.channel_name()
    vip_chanel = []
    for i in channel:
        vip_chanel.append(f'—*{i[:][1]}*\n')
    await bot.send_message(message.from_user.id, ''.join(vip_chanel), parse_mode='Markdown')

@dp.message_handler(lambda message: message.text == "Отзывы", state='*')
async def reviews(message: types.Message, state: FSMContext):
    await state.finish()
    await bot.unban_chat_member(REVIEW_CHANNEL, message.from_user.id)
    link = await bot.export_chat_invite_link(REVIEW_CHANNEL)
    await bot.send_message(message.from_user.id, 'Для того что бы ознакомиться или оставить отзыв - перейдите в группу нажав на кнопку ниже⤵️', reply_markup=otziv)

#####FEEDBACK#####
@dp.message_handler(lambda message: message.text == "Обратная связь", state='*')
async def answer(message: types.Message, state: FSMContext):
    await state.finish()
    await bot.send_message(message.from_user.id, 'Напишите свое сообщение')
    await Answer.a1.set()

@dp.message_handler(state=Answer.a1)
async def text(message: types.Message, state: FSMContext):
    text = message.text
    id = message.from_user.id
    await state.update_data(text=text)
    await state.update_data(id=id)
    await bot.send_message(message.from_user.id, 'Вы написали сообщение, выберите, что делать', reply_markup=feedback)


@dp.callback_query_handler(text='Отправить', state=Answer.a1)
async def send_text(callback:types.CallbackQuery, state: FSMContext):
    data = await state.get_data()
    text = data.get('text')
    id = data.get('id')
    await bot.send_message(admin_id, f'ВАМ ВОПРОС ОТ ПОЛЬЗОВАТЕЛЯ\n{text}')
    await bot.send_message(admin_id, f'{id}', reply_markup=ans)
    await bot.send_message(callback.message.chat.id, 'Ваше сообщение в очереди, ожидайте ответа.')
    await state.reset_state(with_data=False)

@dp.callback_query_handler(text='Загрузить фото', state=Answer.a1)
async def send_photo(callback:types.CallbackQuery, state: FSMContext):
    await bot.send_message(callback.message.chat.id, 'Загрузите ваше фото')
    await Answer.a2.set()

@dp.message_handler(state=Answer.a2, content_types=types.ContentType.PHOTO)
async def feed_photo(message: types.Message, state: FSMContext):
    photo = message.photo[-1].file_id
    await state.update_data(photo=photo)
    data = await state.get_data()
    text = data.get('text')
    id = data.get('id')
    await bot.send_photo(admin_id, photo=photo, caption=f'ВАМ ВОПРОС ОТ ПОЛЬЗОВАТЕЛЯ\n{text}')
    await bot.send_message(admin_id, f'{id}', reply_markup=ans)
    await bot.send_message(message.from_user.id, 'Ваше сообщение в очереди, ожидайте ответа.')

@dp.callback_query_handler(text='Игнор')
async def admin_ignor(callback:types.CallbackQuery, state: FSMContext):
    user_id = callback.message.text
    await bot.send_message(user_id, f'Админ не понял вопроса.\nОткорректируйте свое сообщение или попробуйте позже.')
    await bot.send_message(admin_id, f'Вы проигнорировали пользователя: {user_id}')

@dp.callback_query_handler(text='Ответить')
async def admin_answer(callback:types.CallbackQuery, state: FSMContext):
    user_id = callback.message.text
    await state.update_data(user_id=user_id)
    await bot.send_message(admin_id, f'Напишите свой ответ')
    await Answer.a3.set()

@dp.message_handler(state=Answer.a3)
async def admin_text(message: types.Message, state: FSMContext):
    admin_text = message.text
    await state.update_data(admin_text=admin_text)
    data = await state.get_data()
    user_id = data['user_id']
    await state.reset_state(with_data=False)
    await bot.send_message(user_id, f'Ответ от администратора:\n<b>{admin_text}</b>\nДля того чтобы задать вопрос нажмите еще раз «Обратная связь»')
    await bot.send_message(admin_id, f'Вы ответили пользователю {user_id}')
#####/FEEDBACK#####

#####SUBSCRIBE#####
@dp.message_handler(lambda message: message.text == "Тарифы")
async def rates(message: types.Message):
    if db.user_exists(message.from_user.id):
        date = str(db.get_next_date(message.from_user.id))
        change_date = date[10:12]+'.'+date[7:9]+'.'+date[2:6]
        await bot.send_message(message.from_user.id, f'У вас уже есть выбранный тарифный план, он действует до: {change_date}', reply_markup=mainMenu)
    else:
        await bot.send_message(message.from_user.id, 'Выберите желаемый для вас тарифный план:', reply_markup=keyboard)
        await Buy.r1.set()

#####DEMO#####
@dp.callback_query_handler(text='Демо', state=Buy.r1)
async def demo(message: types.Message, state: FSMContext):
    await state.finish()
    if not db.demo_exists(message.from_user.id):
        us_id = message.from_user.id
        db.add_demo(message.from_user.id)
        channel = db.channel_limit()
        text_chanel = []
        link = db.ch()
        markup = InlineKeyboardMarkup(row_width=1,
                                  inline_keyboard=[
                                      [
                                          InlineKeyboardButton(text='Каналы', url=f'{link[0]}')
                                      ]
                                  ])
        bb = await bot.send_message(us_id, 'Демо доступ🎁\nСрок подписки: 3 ЧАСА\n\n Вы получите доступ к следующим каналам', reply_markup=markup)
        now = datetime.now()
        del_msg = now + timedelta(minutes=1)
        del_ch = now + timedelta(hours=3)
        scheduler = AsyncIOScheduler(timezone='Europe/Moscow')
        scheduler.add_job(delete_msg_demo, 'date', run_date=f'{del_msg}', args=(bot, us_id, bb))
        scheduler.add_job(delete_demo, 'date', run_date=f'{del_ch}', args=(bot, message.from_user.id))
        scheduler.start()
    else:
        await bot.send_message(message.from_user.id, 'У вас уже был демо доступ.', reply_markup=nodemo)
        await Buy.r1.set()
#####/DEMO#####

@dp.callback_query_handler(state=Buy.r1)
async def fstate(callback:types.CallbackQuery, state: FSMContext):
    answer = callback.data
    await state.update_data(answer1=answer)
    await Buy.next()
    await callback.message.edit_text(f'Вы выбрали: \n{answer}', reply_markup=rust)

@dp.callback_query_handler(text='back', state='*')
async def cancel(callback:types.CallbackQuery, state: FSMContext):
    await state.finish()
    await callback.message.edit_text('Выберите желаемый для вас тарифный план:', reply_markup=keyboard)
    await Buy.r1.set()

@dp.callback_query_handler(state=Buy.r2)
async def state(callback:types.CallbackQuery, state: FSMContext):
    data = await state.get_data()
    answer1 = data.get('answer1')
    answer2 = callback.data
    await state.update_data(answer2=answer2)
    await Buy.next()
    await callback.message.edit_text(f'Пожалуйста, переведите ⤵️\n\n*{answer1[-4:]} {answer2}*\n\n_🔹не забудьте про комиссию сети, на указанный ниже счёт._\n\n`TNePNqzub7GWzr2cxfeUTAzPFwuTpyoRWE`\n\n_(нажми на текст что бы скопировать)_\nПокупая подписку, я подтверждаю, что прочитал, принял и согласен с [правилами пользования сервисом](https://t.me/c/1938998371/4) ❗️\n\nПосле того, как оплата дойдёт до нас, мы добавим Вас в наши группы.', reply_markup=solution, parse_mode='Markdown')

@dp.callback_query_handler(text='Я оплатил', state=Buy.r3)
async def add_photo(callback: types.CallbackQuery):
    await callback.message.answer('💰 Оплатили?\nОтправьте боту квитанцию об оплате: скриншот или фото. На квитанции должны быть четко видны: дата, время и сумма платежа. Или вы можете отправить точную дату и время платежа')
    await Buy.r3.set()

@dp.message_handler(state=Buy.r3, content_types=types.ContentType.PHOTO)
async def photo(message: types.Message, state: FSMContext):
    photo_file_id = message.photo[-1].file_id #возвращает file_id фотографии с наилучшим разрешением
    await state.update_data(photo=photo_file_id)
    await state.update_data(id=message.from_user.id)
    await state.update_data(username=message.from_user.username)
    data = await state.get_data()
    answer1 = data.get('answer1')
    answer2 = data.get('answer2')
    answer3 = data.get('photo')
    answer4 = data.get('id')
    answer5 = data.get('username')
    if db.user_exists(answer4):
        db.update_user(answer4, answer1, answer2, answer3, answer5)
    else:
        db.add_user(answer4, answer1, answer2, answer3, answer5)
    await state.reset_state(with_data=False)
    await bot.send_photo(admin_id, photo=answer3, caption=f'{answer1}\n{answer2}\n{answer5}')
    await bot.send_message(admin_id, text=f'{answer4}', reply_markup=madina)
    await bot.send_message(answer4, text='Спасибо! Ваша транзакция проверяется. Как только администратор подтвердит получение средств, Вы получите кнопку на добавление папки со всеми каналами из нашей подборки.\n\n<i>Оставайтесь на связи , кнопка будет доступна в течении 5 минут. Если кнопка недоступна , напишите нам через обратную связь!</i>', reply_markup=mainMenu)

@dp.callback_query_handler(text='add')
async def add_user(callback: types.CallbackQuery):
    us_id = callback.message.text
    user = db.set_date(us_id)
    link = db.ch()
    next_date = db.get_next_date(us_id)[0]
    now = datetime.now()
    delete_now = now + timedelta(minutes=5)
    markup = InlineKeyboardMarkup(row_width=1,
                                  inline_keyboard=[
                                      [
                                          InlineKeyboardButton(text='Каналы', url=f'{link[0]}')
                                      ]
                                  ])
    bb = await bot.send_message(us_id, 'Перейти', reply_markup=markup)
    scheduler = AsyncIOScheduler(timezone='Europe/Moscow')
    scheduler.add_job(delete_msg, 'date', run_date=f'{delete_now}', args=(bot, us_id, bb))
    scheduler.add_job(delete_time, run_date=f'{next_date}', args=(bot, us_id))
    scheduler.start()

@dp.callback_query_handler(text='delete')
async def delete(callback: types.CallbackQuery):
    us_id = callback.message.text
    db.delete_user(us_id)
    await bot.send_message(us_id, 'Не верно отправлен скриншот оплаты, убедитесь в правильности оплаты. Или можете обратиться в тех поддержку.', reply_markup=mainMenu)
#####/SUBSCRIBE#####

#####TIME_DELETE#####
@dp.message_handler()
async def delete_time(message: types.Message, us_id):
    db.delete_user(us_id)
    channel = db.channel_name()
    try:
        for i in channel:
            await bot.kick_chat_member(i[:][2], us_id)
            await bot.unban_chat_member(i[:][2], us_id)
    except:
        pass
    await bot.send_message(us_id, f'Ваше время подписки пришла к концу, чтобы быть в каналах оформите подписку.', reply_markup=mainMenu)

@dp.message_handler()
async def delete_demo(message: types.Message, us_id):
    channel = db.channel_name()
    try:
        for i in channel:
            await bot.kick_chat_member(i[:][2], us_id)
            await bot.unban_chat_member(i[:][2], us_id)
    except:
        pass
    await bot.send_message(us_id, f'Ваше время пробной подписки пришло к концу, чтобы получить доступ, оформите подписку.', reply_markup=mainMenu)


@dp.message_handler()
async def delete_msg(message: types.Message, user_id, bb):
    await bot.delete_message(user_id, bb.message_id)

@dp.message_handler()
async def delete_msg_demo(message: types.Message, user_id, bb):
    await bot.delete_message(user_id, bb.message_id)
#####/TIME_DELETE#####


if __name__ == '__main__':
    executor.start_polling(dp, skip_updates=True)
