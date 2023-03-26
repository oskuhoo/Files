import random
def heita_kolikkoa():
    luku = random.randint(0, 1)
    if luku == 0:
        return True
    elif luku == 1:
        return False

def arvo_lottorivi():
    lottorivi = random.sample(range(1,41), 7)
    print(lottorivi)

def kivi_paperi_sakset():
    lst = ["kivi", "paperi", "sakset"]
    print(random.choice(lst))
		
def heita_noppaa(n):
    silmaluku = random.sample(range(1, n + 1), 1)
    print(silmaluku)
