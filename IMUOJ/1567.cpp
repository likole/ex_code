#include<iostream>
using namespace std;
int main()
{
	int n,a[100],b[100],index=0;
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		cin >> a[i];
	}
	for (int i = 0; i < n; i++)
	{
		if (a[i] % 2 == 1) b[index++] = a[i];
	}
	for (int i = 0; i < index-1; i++)
	{
		for (int j = 0; j < index-1-i; j++)
		{
			if (b[j] > b[j + 1])swap(b[j], b[j + 1]);
		}
	}
	for (int i = 0; i < index; i++)
	{
		cout << b[i] << " ";
	}
	return 0;
}