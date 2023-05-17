from tkinter import *
janela = Tk()
janela.title('Rotina do Casal')
janela.geometry('400x250')

label_texto = Label(janela, width=40, height=10, padx=5, pady=0, text='Escolha um dos botões abaixo para \nfazer algo diferente hoje', font=('Arial',15))
label_texto.grid(row=0, column=0)

janela.mainloop()