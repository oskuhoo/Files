uinput = inuinput = input("Anna tiedoston nimi, josta haluat laskea vokaalit (a,e,i,o,u,y): ")

with open(uinput + '.txt') as f:
	data = f.read()

vokaalit = 0

for x in data:
		if x == 'a' or x == 'A' or x == 'e' or x == 'E' or x == 'i' or x == 'I' or x == 'o' or x == 'O' or x == 'u' or x == 'U' or x == 'y' or x == 'Y':
			vokaalit = vokaalit + 1

print("Vokaalien lukumäärä: %d" % (vokaalit))

f.close()
