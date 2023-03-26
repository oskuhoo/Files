import tkinter as tk

def vaihda_vari(event):
	if vari.get() == "punainen":
		nappula_o['bg'] = 'red'
	elif vari.get() == "sininen":
		nappula_o['bg'] = 'blue'
	elif vari.get() == "vihreä":
		nappula_o['bg'] = 'green'

def vaihda_leveys(event):
	nappula_v['width'] = leveys_saadin.get()

def vaihda_molemmat(event):
	if vari.get() == "punainen":
		nappula_o['bg'] = 'red'
	elif vari.get() == "sininen":
		nappula_o['bg'] = 'blue'
	elif vari.get() == "vihreä":
		nappula_o['bg'] = 'green'
	nappula_v['width'] = leveys_saadin.get()

ikkuna = tk.Tk()

kehys_v_pohja = tk.LabelFrame(ikkuna, text="Vasen")
kehys_o_pohja = tk.LabelFrame(ikkuna, text="Oikea")
leveys_saadin = tk.Scale(kehys_v_pohja, from_=10, to=50, orient=tk.HORIZONTAL)
leveys_saadin.set(50)

leveys_saadin.pack()

vari = tk.StringVar()
varit = {'punainen', 'vihreä', 'sininen'}
vari.set('punainen')
vari_saato = tk.OptionMenu(kehys_o_pohja, vari, *varit)
vari_saato.pack()

nappula_v = tk.Button(kehys_v_pohja, text="Vaihda leveys", width=50, height=25)
nappula_o = tk.Button(kehys_o_pohja, text="Vaihda väri", bg='red', fg='white', width=50, height=25)

nappula_v.bind("<Button-1>", vaihda_leveys)
nappula_o.bind("<Button-1>", vaihda_vari)
ikkuna.bind("<Return>", vaihda_molemmat)

nappula_o.pack()
nappula_v.pack()
kehys_v_pohja.pack(fill=tk.BOTH, side=tk.LEFT, expand=True)
kehys_o_pohja.pack(fill=tk.BOTH, side=tk.RIGHT, expand=True)

ikkuna.mainloop()

