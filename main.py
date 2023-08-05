from telegram.ext import Updater, CommandHandler, MessageHandler, Filters
import Constants as Keys
from telegram import Update
import Responses as R

Token = "your_token"

print("DataBot Started....")

user_message = str().lower()


def start_command(update, context):
    update.message.reply_text('Type Something to get started!')


def options(update, context):
    update.message.reply_text(
        """
        /comps --> Welcome to Computer Engineering
        /it    --> Welcome to Information Technology
        /mech  --> Welcome to Mechanical Engineering
        """
    )


def download(update, context):
    update.message.reply_text('The file is downloading')
    context.bot.sendDocument(update.effective_chat.id,"your_link")


def dlca(update, context):
    update.message.reply_text('The file is downloading')
    context.bot.sendDocument(update.effective_chat.id, "your_link")

def sem3_maths(update, context):
    update.message.reply_text('The file is downloading')
    context.bot.sendDocument(update.effective_chat.id,"your_link")


def ds(update, context):
    update.message.reply_text('The file is downloading')
    context.bot.sendDocument(update.effective_chat.id, "your_link")

def dsgt(update, context):
    update.message.reply_text('The file is downloading')
    context.bot.sendDocument(update.effective_chat.id, "your_link")

def cg(update, context):
    update.message.reply_text('The file is downloading')
    context.bot.sendDocument(update.effective_chat.id, "your_link")

def handle_message(update, context):
    text = str(update.message.text).lower()

    response = R.sample_responses(text)

    update.message.reply_text(response)


def error(update, context):
    print(f"Update{update} caused error {context.error}")


def main():
    updater = Updater("your_key", use_context=True)
    dp = updater.dispatcher

    dp.add_handler(CommandHandler("start", start_command))
    dp.add_handler(CommandHandler("options", options))
    dp.add_handler(CommandHandler("download", download))
    dp.add_handler(CommandHandler("dlca", dlca))
    dp.add_handler(CommandHandler("sem3_maths", sem3_maths))
    dp.add_handler(CommandHandler("cg", cg))
    dp.add_handler(CommandHandler("dsgt", dsgt))
    dp.add_handler(CommandHandler("ds", ds))

    dp.add_handler(MessageHandler(Filters.text, handle_message))

    dp.add_error_handler(error)

    updater.start_polling()
    updater.idle()


main()
