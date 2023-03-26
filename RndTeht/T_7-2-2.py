with open('data_7-2-2.txt', encoding='utf-8') as f:
    data = f.read()
    data = data.replace("Everybody",input("Nimi 1: "))
    data = data.replace("Somebody",input("Nimi 2: "))
    data = data.replace("Anybody",input("Nimi 3: "))
    data = data.replace("Nobody",input("Nimi 4: "))
    print(data)
