import random
roxo = ["Risoto", "Hambúrguer", "Lámen", "Tábua de frios", "Massa c/ gorgonzola", "Tomate confit", "Brie folhado", "Panqueca americana", "Arroz carreteiro", "Drinks especiais"]
vermelho = ["Sushi", "Pizza", "Hambúrguer", "Comida árabe", "Cachorro quente", "Casa de drink", "Casa de carne", "Sorveteria", "Café da manhã", "Self service"]
azul = ["Noite de filme","Spa day", "Responder uma TAG para se conhecer melhor", "Baixar um app de relacionamento", "Vídeo game", "Ligar para as amigas e fazer um jantar juntas", "Fit dance", "Noite de skincare", "Faxina no guarda-roupa", "Começar um livro novo"]
verde = ["Ir no cinema", "Escolher um restaurante pelo prato que quer comer.", "Ir em uma cafeteria que nunca foi", "Sair com as amigas", "Assistir o nascer do sol", "Spa day", "Andar de bike", "Show", "Stand up", "Marcar um encontro"]

print("Está em duvida do que fazer hoje?\nEscolha uma dessas cores\n AZUL VERMELHO VERDEE ROXO")

cor = input("")

if cor == roxo:
    print(random.choice(roxo))

elif cor == vermelho:
    print(random.choice(vermelho))


elif cor == azul:
    print(random.choice(azul))

else:
    print(random.choice(verde)