import Vue from 'vue'
import { MLInstaller, MLCreate, MLanguage } from 'vue-multilanguage'

Vue.use(MLInstaller)

export default new MLCreate({
  initial: 'ru',
  languages: [
    new MLanguage('ru').create({
        search: 'Поиск',
        readmore: 'Подробнее',
        contTitle: 'Оставьте контакт',
        contTitle2: 'и мы Вам перезвоним',
        youName: 'Как к Вам обращатся',
        phone: 'Номер телефона',
        cancel: 'Отмена',
        send: 'Отправить',
        errName: 'Укажите Ваше имя',
        errPhone: 'Укажите правильный номер телефона',
        succesMsg: 'Контакт успешно отправлен, ожидайте звонка',
        setRequest: 'Оставить заявку',

    }),

    new MLanguage('uk').create({
        search: 'Пошук',
        readmore: 'Детальніше',
        contTitle: 'Залиште контакт',
        contTitle2: 'і ми Вам зателефонуємо',
        youName: 'Як до Вас звертатись',
        phone: 'Номер телефону',
        cancel: 'Скасувати',
        send: 'Відправити',
        errName: 'Вкажіть Ваше ім\'я',
        errPhone: 'Вкажіть вірний номер телефону',
        succesMsg: 'Контакт успішно відправлений, очікуйте дзвінка',
        setRequest: 'Залишити заявку',

    }),

    new MLanguage('en').create({
        search: 'Search',
        readmore: 'Read more',
        contTitle: 'Leave a contact',
        contTitle2: 'and we will call you back',
        youName: 'Your name',
        phone: 'Phone number',
        cancel: 'Cancel',
        send: 'Send',
        errName: 'Please enter your name',
        errPhone: 'Please enter correct phone number',
        succesMsg: 'Contact successfully sent, await call',
        setRequest: 'Leave a request',

    }),
  ]
})
