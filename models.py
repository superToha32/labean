from django.db import models
# Create your models here.
from django.urls import reverse


class User(models.Model):
    name = models.CharField(max_length=255, verbose_name='Имя')
    number = models.IntegerField(verbose_name='Номер телефона')
    email = models.CharField(max_length=255, verbose_name='Почта')
    TIN = models.CharField(max_length=255, verbose_name='Идентификационный номер налогоплательщика')
    password = models.CharField(max_length=255, verbose_name='Пароль')
    remember_token = models.CharField(max_length=255, verbose_name='Ключ')
    created_at = models.DateTimeField(auto_now_add=True, verbose_name='Дата создания')
    updated_at = models.DateTimeField(auto_now=True, verbose_name='Дата последнего обновления')
    def __str__(self):
        return self.name
    class Meta:
        verbose_name = 'Пользователя'
        verbose_name_plural = 'Пользователи'

class Request(models.Model):
    cat = models.BooleanField(default=True,verbose_name='Покупка/ продажа')
    user = models.CharField(max_length=100, verbose_name='id Создателя заявки')
    content = models.CharField(max_length=255, verbose_name='Описание')
    price = models.IntegerField(verbose_name='Цена')
    amount = models.IntegerField(verbose_name='Количество товара')
    cur = models.CharField(max_length=10,verbose_name='Валюта')
    start_date = models.DateTimeField(auto_now=True,verbose_name='Дата начала')
    end_date = models.DateTimeField(verbose_name='Дата конца')
    def __str__(self):
        return self.content
    class Meta:
        verbose_name = 'Запрос'
        verbose_name_plural = 'Запросы'
class Message(models.Model):
    sender = models.IntegerField(null=True, verbose_name='id Отправителя')
    host = models.IntegerField(verbose_name='id Принимающего')
    content = models.CharField(max_length=255,verbose_name='Сообщение')
    time = models.DateTimeField(auto_now_add=True, verbose_name='Дата отправки')
    class Meta:
        verbose_name = 'Сообщению'
        verbose_name_plural = 'Сообщения'
class Support(models.Model):
    sender = models.IntegerField(null=True, verbose_name='id Отправителя')
    content = models.CharField(max_length=255, verbose_name='Сообщение')

