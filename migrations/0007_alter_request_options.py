# Generated by Django 4.0.4 on 2022-04-20 21:14

from django.db import migrations


class Migration(migrations.Migration):

    dependencies = [
        ('page', '0006_support_sender_alter_message_sender'),
    ]

    operations = [
        migrations.AlterModelOptions(
            name='request',
            options={'verbose_name': 'Запрос', 'verbose_name_plural': 'Запросы'},
        ),
    ]
