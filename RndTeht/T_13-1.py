import random
import time

class Olento(object):

    def __init__(self, rohkeus, katseen_voima):
        self.rohkeus = random.randint(4, 8)
        self.katseen_voima = random.randint(2, 4)
        

        
class Peikko(Olento):

    NIMITAVUT = ("Ur", "Gar", "Grah", "Gur", "Kan", "Kazah", "Bar", "Bazh", "Ragh", "Rudz")
    RIEMUTAVUT = ("Agh", "Ugh", "Ourgh", "Drar", "Brar", "Dza", "Gra", "Gur", "Rah", "Urgh", "Ra")

    def __init__(self):
        self.nimi = self._arvo_sanat(self.NIMITAVUT, 3, "-")
        super().__init__(rohkeus, katseen_voima)

    def _arvo_sanat(self, tavut, n, erotin, p=0.5):
        osat = random.choices(tavut, k=random.randint(2, n))
        sanat = osat[0]
        for osa in osat[1:]:
            if random.random() < p:
                sanat += erotin + osa
            else:
                sanat += osa.lower()
        return sanat

    def arvo_hurraus(self):
        return self._arvo_sanat(self.RIEMUTAVUT, 8, " ", 0.7)

class Vuorenpeikko(Peikko):
           """docstring for Vuorenpeikko"""
           def __init__(self, arg):
               super(Vuorenpeikko, self).__init__()
               self.arg = arg
                      
  
class Sankari(Olento):

    def __init__(self, nimi):
        self.nimi = nimi
        super().__init__(rohkeus, katseen_voima)

    def arvo_hurraus(self):

        huudot = ["Ugh", "Oof", "Aargh", "Raagh", "Whaa"]
        sotahuuto = random.choice(huudot)
        return sotahuuto
        
def hurraa(olio):
    print('%s: "%s!"' % (olio.nimi, olio.arvo_hurraus()))

def tulosta_rapaytys(rapayttaja):
    if rapayttaja:
        if rapayttaja.rohkeus > 0:
            print("ja %s räpäyttää!" % rapayttaja.nimi)
        else:
            print("ja %s karkaa!" % rapayttaja.nimi)
    else:
        print("eikä kummankaan silmä rävähdä!")

def tuijota(olio1, olio2):
    print("He tuijottavat toisiaan...", end='')
    time.sleep(1)
    katse1 = random.randint(0, olio1.katseen_voima)
    katse2 = random.randint(0, olio2.katseen_voima)
    rapayttaja = None

    if katse1 > katse2:
        rapayttaja = olio2
        rapayttaja.rohkeus -= katse1
    elif katse1 < katse2:
        rapayttaja = olio1
        rapayttaja.rohkeus -= katse2
    tulosta_rapaytys(rapayttaja)


def taistele(vasen, oikea):
    while vasen.rohkeus > 0 and oikea.rohkeus > 0:
        tuijota(vasen, oikea)
        time.sleep(0.5)
    if vasen.rohkeus > 0:
        hurraa(vasen)
    else:
        hurraa(oikea)

sankari = Sankari(input("Mikä on sankarimme nimi? "))
pelastetut = 0
while sankari.rohkeus > 0:
    sankarin_tiedot = sankari.nimi + " [" + str(sankari.rohkeus) + "]"
    print("Sankarimme %s kävelee kohti seikkailua." % sankarin_tiedot)
    time.sleep(0.7)
    peikko = Peikko()
    peikon_tiedot = peikko.nimi + " [" + str(peikko.rohkeus) + "]"
    print("Vastaan tulee hurja %s!" % peikon_tiedot)
    time.sleep(1)
    taistele(peikko, sankari)
    print()
    time.sleep(1.5)

time.sleep(1.5)
print("%s herää sängystään hikisenä - onneksi se oli vain unta!" % sankari.nimi)