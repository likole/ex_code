#include<iostream>
using namespace std;
int main()
{
	int a[1000], n, index = 0;
	while (cin >> n)
	{
		a[index] = n;
		index++;
	}
	for (int i = 0; i < index-1; i++)
	{
		for (int j = 0; j < index-1-i; j++)
		{
			if (a[j] < a[j + 1])swap(a[j], a[j + 1]);
		}
	}
	for (int i = 0; i < 5; i++)
	{
		cout << a[i] << " ";
	}
	return 0;
}