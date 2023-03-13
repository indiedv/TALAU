Algoritmo Operaciones
	Definir num1,num2 Como Entero
	Escribir 'Ingrese dos números'
	Leer num1,num2
	Escribir 'Seleccione número de operación'
	Escribir 'Para Suma digite 1. '
	Escribir 'Para Resta digite 2. '
	Escribir 'Para Multiplicación digite 3. '
	Escribir 'Para División digite 4. '
	Leer operacion
	Segun operacion  Hacer
		1:
			total <- num1+num2
			Escribir 'La suma de los números es: ',total
		2:
			total <- num1-num2
			Escribir 'La resta de los números es: ',total
		3:
			total <- num1*num2
			Escribir 'La multiplicación de los números es: ',total
		4:
			total <- num1/num2
			Escribir 'La división de los números es: ',total
		De Otro Modo:
			Escribir 'Operación no válida, intente de nuevo'
	FinSegun
FinAlgoritmo
