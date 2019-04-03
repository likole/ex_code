#include<iostream>
using namespace std;
int main()
{
	int a, b;
	char c;
	int buff[10];
	while (cin >> a >> c >> b)
	{
		double n = (double)a / b;
		cout << ".";
		for (int i = 0; i < 10; i++)
		{
			n *= 3;
			buff[i] = n;
			n -= buff[i];
		}
		if (n * 3 >= 2) ++buff[9];
		for (int i = 9; i >= 1; i--)
		{
			if (buff[i] > 2)
			{
				++buff[i - 1];
				buff[i] = 0;
			}
		}
		for (int i = 0; i < 10; i++)
		{
			cout << buff[i];
		}
		cout << endl;
	}
}