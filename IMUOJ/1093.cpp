#include<iostream>
using namespace std;
int main()
{
	int a = 0, b = 0, c = 0, d = 0;
	while (cin.peek() != '\n')
	{
		char x = cin.get();
		if ((x >= 'A' && x <= 'Z') || (x >= 'a' && x <= 'z')) a++;	
		else if (x == ' ') b++;
		else if (x >= '0' && x <= '9') c++;
		else d++;
	}
	cout << a << endl << b << endl<< c << endl<< d << endl;
	//cin.get();
	//cin.get();
	return 0;
}