#include<iostream>
using namespace std;
int a[100000];
int main()
{
	int n,k;
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		cin >> k;
		a[k]++;
	}
	int max_v = 0, max_id;
	for (int i = 0; i < n; i++)
	{
		if (a[i] > max_v)
		{
			max_v = a[i];
			max_id = i;
		}
	}
	cout << max_id << endl << max_v << endl;
}