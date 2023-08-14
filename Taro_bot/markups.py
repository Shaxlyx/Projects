from aiogram.types import ReplyKeyboardMarkup, InlineKeyboardButton, KeyboardButton, InlineKeyboardMarkup


btnthree = KeyboardButton('Расклад на ТРИ карты')
btnpod = KeyboardButton('Подкова')
btnlove = KeyboardButton('Обретение Любви')
btnkrest = KeyboardButton('Кельтский Крест')
btnadd = KeyboardButton('Доб')

mainMenu = ReplyKeyboardMarkup(resize_keyboard=True)
mainMenu.add(btnthree, btnpod, btnlove, btnkrest)

# buttons = [
#     InlineKeyboardButton(
#         text='Здоровье',
#         callback_data='Здоровье'
#     ),
#     InlineKeyboardButton(
#         text='Любовь',
#         callback_data='Любовь'
#     ),
#     InlineKeyboardButton(
#         text='Карьера',
#         callback_data='Карьера'
#     ),
# ]
# keyboard = InlineKeyboardMarkup(row_width=1)
# keyboard.add(*buttons)

