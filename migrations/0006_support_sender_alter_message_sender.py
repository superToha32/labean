# Generated by Django 4.0.4 on 2022-04-20 20:56

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('page', '0005_message_support_alter_user_options_alter_request_cur'),
    ]

    operations = [
        migrations.AddField(
            model_name='support',
            name='sender',
            field=models.IntegerField(null=True, verbose_name='Отправитель'),
        ),
        migrations.AlterField(
            model_name='message',
            name='sender',
            field=models.IntegerField(null=True, verbose_name='Отправитель'),
        ),
    ]
