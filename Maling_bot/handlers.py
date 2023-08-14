from aiogram.dispatcher.filters import Command
from main import bot, dp

from aiogram.types import Message
from config import admin_id, users

# @dp.message_handler(Command('sendall'))
# async def send_all(message: Message):
#     if message.chat.id == admin_id:
#         await message.answer('Start')
#         for i in users:
#             await bot.send_message(i, message.text[message.text.find(' '):])
#
#         await message.answer('Done')
#
#     else:
#         await message.answer('Error')
