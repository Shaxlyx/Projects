from aiogram.types import ReplyKeyboardMarkup, InlineKeyboardButton, KeyboardButton, InlineKeyboardMarkup


btntar = KeyboardButton('Тарифы')
btncon = KeyboardButton('Обратная связь')
btnvip = KeyboardButton('VIP Каналы')
btnotziv = KeyboardButton('Отзывы')
btnfaq = KeyboardButton('⁉️FAQ')

mainMenu = ReplyKeyboardMarkup(resize_keyboard=True)
mainMenu.add(btntar, btncon, btnvip, btnotziv, btnfaq)


buttons = [
    InlineKeyboardButton(
        text='1 месяц - 70$',
        callback_data='1 месяц - 70$'
    ),
    InlineKeyboardButton(
        text='3 месяца - 160$',
        callback_data='3 месяца - 160$'
    ),
    InlineKeyboardButton(
        text='1 год - 450$',
        callback_data='1 год - 450$'
    ),
    InlineKeyboardButton(
        text='Демо',
        callback_data='Демо'
    ),
]
keyboard = InlineKeyboardMarkup(row_width=1)
keyboard.add(*buttons)

demo = [
    InlineKeyboardButton(
        text='1 месяц - 70$',
        callback_data='1 месяц - 70$'
    ),
    InlineKeyboardButton(
        text='3 месяца - 160$',
        callback_data='3 месяца - 160$'
    ),
    InlineKeyboardButton(
        text='1 год - 450$',
        callback_data='1 год - 450$'
    ),
]
nodemo = InlineKeyboardMarkup(row_width=1)
nodemo.add(*demo)

ust = [
    InlineKeyboardButton(
        text='USDT(TRC20)',
        callback_data='USDT(TRC20)'
    ),
    InlineKeyboardButton(
        text='Назад',
        callback_data='back'
    ),
]
rust = InlineKeyboardMarkup(row_width=1)
rust.add(*ust)

solu = [
    InlineKeyboardButton(
        text='Я оплатил',
        callback_data='Я оплатил'
    ),
    InlineKeyboardButton(
        text='Назад',
        callback_data='back'
    )
]
solution = InlineKeyboardMarkup(row_width=1)
solution.add(*solu)

adm = [
    InlineKeyboardButton(
        text='Добавить',
        callback_data='add'
    ),
    InlineKeyboardButton(
        text='Удалить',
        callback_data='delete'
    )
]
madina = InlineKeyboardMarkup(row_width=1)
madina.add(*adm)

answer= [
    InlineKeyboardButton(
        text='Ответить',
        callback_data='Ответить'
    ),
    InlineKeyboardButton(
        text='Игнор',
        callback_data='Игнор'
    ),
]
ans = InlineKeyboardMarkup(row_width=1)
ans.add(*answer)

feed= [
    InlineKeyboardButton(
        text='Отправить',
        callback_data='Отправить'
    ),
    InlineKeyboardButton(
        text='Загрузить фото',
        callback_data='Загрузить фото'
    ),
]
feedback = InlineKeyboardMarkup(row_width=1)
feedback.add(*feed)

otz= [
    InlineKeyboardButton(
        text='ПОЧИТАТЬ ОТЗЫВЫ',
        url='https://t.me/+t58SzogEqlMzNjVi'
    ),
]
otziv = InlineKeyboardMarkup(row_width=1)
otziv.add(*otz)

admin_add_link = KeyboardButton('Изменить ссылку')
admin_delete_user = KeyboardButton('Удалить пользователя')
admin_add_ch = KeyboardButton('Добавить канал')
adminlink = ReplyKeyboardMarkup(resize_keyboard=True)
adminlink.add(admin_add_link, admin_delete_user, admin_add_ch)

