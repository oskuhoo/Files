import math
def highestPowerof2(luku): 
  
    p = int(math.log(luku, 2)); 
    return int(pow(2, p));  

luku = int(input("Anna luku: ")); 
print(highestPowerof2(luku)); 
