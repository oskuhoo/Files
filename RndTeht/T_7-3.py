with open('kuukaudet.txt', encoding='utf-8') as f:
    data = f.readlines()

for rivi in data:

    rivi = rivi.strip()

    print(rivi, end=': ')

    if rivi == "Tammikuu":
        print("Vuoden ensimmäinen kuukausi")
    elif rivi == "Helmikuu":
        print("Vuoden lyhyin kuukausi. Normaalisti 28 päivää, karkausvuotena 29")
    elif rivi == "Maaliskuu":
        print("Kevät alkaa")
    elif rivi == "Huhtikuu":
        print("Mikael Agricolan päivä löytyy täältä")
    elif rivi == "Toukokuu":
        print("Äitienpäivä on tässä kuukaudessa")
    elif rivi == "Kesäkuu" or rivi == "Heinäkuu" or rivi == "Elokuu":
        print("Kesälomakuukausi!")
    elif rivi == "Syyskuu":
        print("Kaunis retkeilykuukausi")
    elif rivi == "Lokakuu":
        print("Aleksis Kiven päivä 10.Lokakuuta")
    elif rivi == "Marraskuu":
        print("Kuoleman kuukausi")
    elif rivi == "Joulukuu":
        print("6.Joulukuuta on Suomen itsenäisyyspäivä")