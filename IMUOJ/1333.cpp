#include <iostream>
using namespace std;
int main()
{
	int N;
	while (cin >> N)
	{
		int a[100][100];
		a[0][0] = 1;
		for (int i = 0; i<N; i++)
		{
			a[i + 1][0] = a[i][0] + i + 1;
		}
		for (int j = 1; j<N; j++)
		{
			for (int i = 0; i<N - j; i++)
			{

				a[i][j] = a[i + 1][j - 1] + 1;
			}
		}
		for (int i = 0; i<N; i++)
		{
			for (int j = 0; j<N - i; j++)
			{
				cout << a[i][j];
				if (j != N - i - 1)cout << " ";
			}
			cout << endl;
		}
	}
	//cin.get();
	//cin.get();
	return 0;
}