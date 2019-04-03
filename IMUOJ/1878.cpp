#include<iostream>
using namespace std;
int main()
{
	int n, a[1000];
	while (cin >> n)
	{
		for (int i = 0; i < n; i++)
		{
			cin >> a[i];
		}
		int sum=0, m=0, M=0;
		for (int i = 0; i < n; i++)
		{
			sum += a[i];
			if (a[i] < a[m])m = i;
			if (a[i] > a[M])M = i;
		}
		cout << a[M] << " " << a[m] << " " << sum << endl;
	}
}