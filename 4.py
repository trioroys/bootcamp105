import sys
value = 7
if int(value)% 2 == 0:
    print("Masukan bilangan ganjil")
    sys.exit(0)
def cetak_gambar(value):
    value= int(value) 
    for x in range(1,value):
        if x == 1:
            print("x " * value)
            continue
        for x in range(1, value + 1):
            if x == (value + 1) / 2:
                print("x ", end= "")
            else:
                print("= ", end= "")
        print("")
    print ("x " * value)
cetak_gambar(value)                
    

