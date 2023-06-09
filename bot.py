import discord
import json
import random
import os
from discord.ext import commands

bot = commands.Bot(command_prefix = '.')
TOKEN = open('F:\\DISCORD BOT TOKEN\\token.txt','r').read()
os.chdir(r'F:\\Discord bot')

@bot.event
async def on_ready():
    print('Bot is ready.')


@bot.event
async def on_member_join(member):
	with open('users.json', 'r') as f:
		users = json.load(f)

	await update_data(users, member)

	with open('users.json', 'w') as f:
		json.dump(users, f)

@bot.event
async def on_message(message):
	with open('users.json', 'r') as f:
		users = json.load(f)

	await update_data(users, message.author)
	await add_experience(users, message.author, 5)
	await level_up(users, message.author, message.channel)

	with open('users.json', 'w') as f:
		json.dump(users, f)

async def update_data(users, user):
	if not user.id in users:
		users[user.id] = {}
		users[user.id]['experience'] = 0
		users[user.id]['level'] = 1

async def add_experience(users, user, exp):
	users[user.id]['experience'] += exp

async def level_up(users, user, channel):
	experience = users[user.id]['experience']
	lvl_start = users[user.id]['level']
	lvl_end = int(experience ** (1/4))

	if lvl_start < lvl_end:
		await bot.send_message(channel, '{} has leveled up to level {}'.format(user.mention, lvl_end))
		users[user.id]['level'] = lvl_end

bot.run(TOKEN)
