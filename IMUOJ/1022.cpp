#include<iostream>
using namespace std;
int main()
{
	int a=0, b=0, c=0, d=0;
	while (cin.peek()!='\n')
	{
		char x = cin.get();
		if ((x >= 'A' && x <= 'Z') || (x >= 'a' && x <= 'z')) a++;
		else if (x >= '0' && x <= '9') b++;
		else if (x == ' ') c++;
		else d++;
	}
	cout << a << " " << b << " " << c << " " << d << endl;
	//cin.get();
	//cin.get();
	return 0;
}