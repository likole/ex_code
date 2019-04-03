#include<iostream>
using namespace std;
int main()
{
	while (cin.peek() != '\0'&&cin.peek() != EOF)
	{
		char c = cin.get();
		if (c == '0') c = '1';
		else if (c == '1')c = '0';
		cout << c;
	}
	cin.get();
	cin.get();
	return 0;
}