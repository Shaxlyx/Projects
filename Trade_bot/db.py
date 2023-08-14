import sqlite3
import datetime as DT

from dateutil.relativedelta import *

conn = sqlite3.connect('db.db', check_same_thread=False)
cursor = conn.cursor()

class Database:
    def __init__(self, db):
        self.connection = sqlite3.connect(db)
        self.cursor = self.connection.cursor()

    def add_user(self, user_id, rate, payment, photo, username):
        with self.connection:
            return self.cursor.execute("INSERT INTO `users` (`user_id`, `rate`, `payment`, `photo`, `username`) VALUES (?, ?, ?, ?, ?)", (user_id, rate, payment, photo, username,))


    def user_exists(self, user_id):
        with self.connection:
            result = self.cursor.execute("SELECT * FROM `users` WHERE `user_id` = ?", (user_id,)).fetchall()
            return result

    def set_date(self, user_id):
        with self.connection:
            result = self.cursor.execute("SELECT `rate` FROM `users` WHERE `user_id` = ?", (user_id,)).fetchone()
            if result[0] == '1 месяц - 70$':
                # now = DT.datetime.today()
                now = DT.datetime.now()
                date_next = now + relativedelta(months=+1)
                # date_str = date_next.strftime("%Y-%m-%d")
                return self.cursor.execute("UPDATE `users` SET `datetime` = ?, `date_next` = ? WHERE `user_id` = ?", (now, date_next, user_id,))
            elif result[0] == '3 месяца - 160$':
                now = DT.datetime.now()
                date_next = now + relativedelta(months=+3)
                return self.cursor.execute("UPDATE `users` SET `date_next` = ? WHERE `user_id` = ?", (date_next, user_id,))
            elif result[0] == '1 год - 450$':
                now = DT.datetime.today()
                date_next = now + relativedelta(years=+1)
                return self.cursor.execute("UPDATE `users` SET `date_next` = ? WHERE `user_id` = ?", (date_next, user_id,))

    def get_next_date(self, user_id):
        with self.connection:
            result = self.cursor.execute("SELECT `date_next` FROM `users` WHERE `user_id` = ?", (user_id,)).fetchone()
            return result

    def update_user(self, user_id, rate, payment, photo, username):
        with self.connection:
            return self.cursor.execute("UPDATE `users` SET `rate` = ?, `payment` = ?, `photo` = ?, `username` = ? WHERE `user_id` = ?", (rate, payment, photo, username, user_id,))

    def delete_user(self, user_id):
        with self.connection:
            return self.cursor.execute("DELETE FROM `users` WHERE `user_id` = ?", (user_id,))

    def add_demo(self, user_id):
        with self.connection:
            return self.cursor.execute("INSERT INTO `demo` (`user_id`) VALUES (?)", (user_id,))

    def demo_exists(self, user_id):
        with self.connection:
            result = self.cursor.execute("SELECT * FROM `demo` WHERE `user_id` = ?", (user_id,)).fetchall()
            return result

    def channel_name(self):
        with self.connection:
            result = self.cursor.execute("SELECT * FROM `channel`").fetchall()
            return result

    def add_channel(self, name, channel_id):
        with self.connection:
            return self.cursor.execute("INSERT INTO `channel` (`name`, `channel_id`) VALUES (?, ?)", (name, channel_id,))

    def channel_limit(self):
        with self.connection:
            result = self.cursor.execute("SELECT * FROM `channel` LIMIT 5").fetchall()
            return result

    def ch(self):
        with self.connection:
            result = self.cursor.execute("SELECT `link` FROM `ch`").fetchall()
            for x in result:
                return x

    def add_link(self, link):
        with self.connection:
            return self.cursor.execute("UPDATE `ch` SET `link` = ?", (link,))

