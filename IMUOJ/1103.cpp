#include<iostream>
using namespace std;
int main()
{
	int arr[3][3];
	for (int i = 0; i < 3; i++)
	{
		for (int j = 0; j < 3; j++)
		{
			cin >> arr[i][j];
		}
	}
	int sum = 0;
	for (int i = 0; i < 3; i++)
	{
		sum += arr[i][i];
	}
	cout << sum << endl;
	//cin.get();
	//cin.get();
	return 0;
}