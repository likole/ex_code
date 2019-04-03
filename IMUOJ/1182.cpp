#include<iostream>
using namespace std;
int yanghui_triangle[10][10];
int main()
{
	for (int i = 0; i < 10; i++)
	{
		for (int j = 0; j <= i; j++)
		{
			if (j == 0 || i == j) yanghui_triangle[i][j] = 1;
			else yanghui_triangle[i][j] = yanghui_triangle[i - 1][j - 1] + yanghui_triangle[i - 1][j];
		}
	}
	int n;
	while (cin >> n && (n >= 1 && n <= 10))
	{
		for (int i = 0; i < n; i++)
		{
			cout << "  ";
			for (int j = 0; j < i; j++)
			{
				cout << "   ";
			}
			for (int j = 0; j <n - i; j++)
			{
				cout<<yanghui_triangle[n - 1 - i][j];
				if (j != n - i - 1)cout << "     ";
			}
			cout << endl;
		}
		cout << endl;
	}
	return 0;
}