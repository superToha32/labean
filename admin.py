from django.contrib import admin
from .models import *
class UserAdmin(admin.ModelAdmin):
    list_display = ('id', 'name', 'email', 'created_at')
    list_display_links = ('id', 'name')
    search_fields = ('name',)
    list_filter = ('id',)
class RequestAdmin(admin.ModelAdmin):
    list_display = ('id', 'cat', 'user', 'content', 'price', 'cur')
    list_display_links = ('id', 'cat', 'user')
    search_fields = ('user', 'content')
    list_filter = ('start_date', 'price')
class MessageAdmin(admin.ModelAdmin):
    list_display = ('id', 'sender', 'host', 'content', 'time')
    list_display_links = ('sender', 'host')
    search_fields = ('sender', 'content')
    list_filter = ('time',)
class SupportAdmin(admin.ModelAdmin):
    list_display = ('id', 'sender', 'content')
    list_display_links = ('sender',)
    search_fields = ('sender',)

admin.site.register(User, UserAdmin)
admin.site.register(Request, RequestAdmin)
admin.site.register(Message, MessageAdmin)
admin.site.register(Support, SupportAdmin)
