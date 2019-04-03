#include<iostream>
using namespace std;
int main()
{
	int a[1000], count;
	while (cin >> a[0])
	{
		for (count = 1;; count++)
		{
			cin >> a[count];
			if (a[count] == 0)break;
		}
		int m=0;
		for (int i = 1; i < count; i++)
		{
			if (a[i] > a[m])m = i;
		}
		cout << a[m] << endl;
	}
}