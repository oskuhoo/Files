sarjat = (("Viisas", "Jörö", "Unelias", "Lystikäs", "Nuhanenä", "Ujo", "Vilkas"),
          ("Juhani", "Tuomas", "Aapo", "Simeoni", "Timo", "Lauri", "Eero"),
          ("maanantaina", "tiistaina", "keskiviikkona", "torstaina", "perjantaina", "lauantaina", "sunnuntaina"))

for i in range(21):

    print(sarjat[i % 3][i % 7], end='')
    
    if i % 3 == 2:
        print()
    else:
        print(' ', end='')