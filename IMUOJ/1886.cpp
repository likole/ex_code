#include<iostream>
using namespace std;
int main()
{
	int a[100], index = 0;
	int n;
	while (cin >> n)
	{
		if (n == -1)break;
		a[index++] = n;
	}
	for (int i = 0; i < index-1; i++)
	{
		for (int j = 0; j < index-1-i; j++)
		{
			if (a[j] > a[j + 1]) swap(a[j], a[j + 1]);
		}
	}
	for (int i = 0; i < index; i++)
	{
		cout << a[i]; 
		if (i != index - 1)cout << " ";
	}
}