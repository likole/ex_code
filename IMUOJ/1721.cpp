#include<iostream>
using namespace std;
int main()
{
	int x;
	char star;
	cin >> x >> star;
	for (int i = 1; i <(x+1)/2; i++)
	{
		for (int j = 0; j < (x+1)/2-i; j++)
		{
			cout << " ";
		}
		for (int j = 0; j < i*2-1; j++)
		{
			cout << star;
		}
		cout << endl;
	}
	for (int i =(x+1)/2; i <= x; i++)
	{
		for (int j = 0; j < i-(x + 1) / 2 ; j++)
		{
			cout << " ";
		}
		for (int j = 0; j < x-2*(i-(x+1)/2); j++)
		{
			cout << star;
		}
		cout << endl;
	}
	//cin.get();
	//cin.get();
	return 0;
}