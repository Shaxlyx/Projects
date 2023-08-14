import sqlite3

conn = sqlite3.connect('db.db', check_same_thread=False)
cursor = conn.cursor()

class Database:
    def __init__(self, db):
        self.connection = sqlite3.connect(db)
        self.cursor = self.connection.cursor()

    def add_user(self, user_id, username):
        with self.connection:
            return self.cursor.execute("INSERT INTO `users` (`user_id`, `username`) VALUES (?, ?)", (user_id, username,))

    def user_exists(self, user_id):
        with self.connection:
            result = self.cursor.execute("SELECT * FROM `users` WHERE `user_id` = ?", (user_id,)).fetchall()
            return result

    def cart_name(self):
        with self.connection:
            result = self.cursor.execute("SELECT * FROM `carts`").fetchall()
            return result

    def old_cart_name(self):
        with self.connection:
            result = self.cursor.execute("SELECT * FROM `carts` WHERE `pick` = ?", ('1',)).fetchall()
            return result


    def add_cart(self, name, direct, photo):
        with self.connection:
            return self.cursor.execute("INSERT INTO `carts` (`name`, `direct`, `photo`) VALUES (?, ?, ?)", (name, direct, photo,))



