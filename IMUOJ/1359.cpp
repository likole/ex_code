#include<iostream>
#include<string>
using namespace std;
int main()
{
	string x;
	cin >> x;
	for (int i = 0; i < x.length(); i++)
	{
		switch (x[i])
		{
		case 'a':
		case 'b':
		case 'c':
			x[i] = '2';
			break;
		case 'd':
		case 'e':
		case 'f':
			x[i] = '3';
			break;
		case 'g':
		case 'h':
		case 'i':
			x[i] = '4';
			break;
		case 'j':
		case 'k':
		case 'l':
			x[i] = '5';
			break;
		case 'm':
		case 'n':
		case 'o':
			x[i] = '6';
			break;
		case 'p':
		case 'q':
		case 'r':
		case 's':
			x[i] = '7';
			break;
		case 't':
		case 'u':
		case 'v':
			x[i] = '8';
			break;
		case 'w':
		case 'x':
		case 'y':
		case 'z':
			x[i] = '9';
			break;
		}
		if (x[i] >= 'A'&& x[i] <= 'Z') x[i] += 33;
	}
	cout << x << endl;
	//cin.get();
	//cin.get();
	return 0;
}