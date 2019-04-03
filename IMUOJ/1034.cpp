#include<iostream>
using namespace std;
void f(int array[3][3], int &m, int &n);
int main()
{
	int arr[3][3], m=0, n=0;
	for (int i = 0; i < 3; i++)
	{
		for (int j = 0; j < 3; j++)
		{
			cin >> arr[i][j];
		}
	}
	f(arr, m, n);
	cout << m << " " << n << endl;
	//cin.get();
	//cin.get();
	return 0;
}
void f(int arr[3][3], int &m, int &n)
{
	m = n = 0;
	for (int i = 0; i < 3; i++)
	{
		m += arr[i][i];
	}
	for (int i = 0; i < 3; i++)
	{
		n += arr[i][2 - i];
	}
}