#include<iostream>
using namespace std;
int main()
{
	//generate yanghui triangle
	int arr[30][30];
	for (int i = 0; i < 30; i++)
	{
		for (int j = 0; j < i+1; j++)
		{
			if (j == 0 || j == i) arr[i][j] = 1;
			else arr[i][j] = arr[i - 1][j - 1] + arr[i - 1][j];
		}
	}
	//main
	int x;
	while (cin >> x)
	{
		for (int i = 0; i < x; i++)
		{
			for (int j = 0; j < i+1; j++)
			{
				cout << arr[i][j] << " ";
			}
			cout << endl;
		}
		cout << endl;
	}
}