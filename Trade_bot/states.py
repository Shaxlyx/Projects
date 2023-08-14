from aiogram.dispatcher.filters.state import StatesGroup, State

class Buy(StatesGroup):
    r1 = State()
    r2 = State()
    r3 = State()

class Answer(StatesGroup):
    a1 = State()
    a2 = State()
    a3 = State()

class Sub(StatesGroup):
    s1 = State()
    s2 = State()

class Add(StatesGroup):
    l1 = State()

class Del(StatesGroup):
    d1 = State()

class Ch(StatesGroup):
    c1 = State()
    c2 = State()
