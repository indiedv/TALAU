Algoritmo Operaciones
	Definir num1,num2 Como Entero
	Escribir 'Ingrese dos n�meros'
	Leer num1,num2
	Escribir 'Seleccione n�mero de operaci�n'
	Escribir 'Para Suma digite 1. '
	Escribir 'Para Resta digite 2. '
	Escribir 'Para Multiplicaci�n digite 3. '
	Escribir 'Para Divisi�n digite 4. '
	Leer operacion
	Segun operacion  Hacer
		1:
			total <- num1+num2
			Escribir 'La suma de los n�meros es: ',total
		2:
			total <- num1-num2
			Escribir 'La resta de los n�meros es: ',total
		3:
			total <- num1*num2
			Escribir 'La multiplicaci�n de los n�meros es: ',total
		4:
			total <- num1/num2
			Escribir 'La divisi�n de los n�meros es: ',total
		De Otro Modo:
			Escribir 'Operaci�n no v�lida, intente de nuevo'
	FinSegun
FinAlgoritmo
