#include<iostream>
using namespace std;
int main()
{
	int d[4];
	char t;
	while (cin >> d[0] >> t >> d[1] >> t >> d[2] >> t >> d[3])
	{
		int b[4][8] = { 0 };
		for (int i = 0; i < 4; i++)
		{
			int index = 0;
			while (d[i] > 0)
			{
				b[i][index++] = d[i] % 2;
				d[i] /= 2;
			}
		}
		for (int i = 0; i < 4; i++)
		{
			for (int j = 8 - 1; j >= 0; j--)
			{
				cout << b[i][j];
			}
			if (i != 3)cout << ".";
		}
		cout << endl;
	}
	return 0;
}