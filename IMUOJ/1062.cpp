#include<iostream>
using namespace std;
int main()
{
	int n[100][2];
	int a, b;
	cin >> a >> b;
	for (int i = 0; i < a+b; i++)
	{
		cin >> n[i][0] >> n[i][1];
	}
	for (int i = 0; i < a+b-1; i++)
	{
		for (int j = 0; j < a+b-1-i; j++)
		{
			if (n[j][0]>n[j + 1][0])swap(n[j], n[j + 1]);
		}
	}
	for (int i = 0; i < a+b; i++)
	{
		cout << n[i][0] << " " << n[i][1] << endl;
	}
	return 0;
}