#include<iostream>
using namespace std;
int main()
{
	int n, a[1000], remain;
	cin >> n;
	remain = n;
	for (int i = 0; i < n; i++)
	{
		a[i] = 1;
	}
	int index = 0,count=0;
	while (remain > 0)
	{
		if (a[index] == 1)count++;
		if (count == 3)
		{
			a[index] = 0;
			count = 0;
			remain--;
		}
		index++;
		if (index == n) index = 0;
	}
	cout << index << endl;
	//cin.get(); cin.get();
	return 0;
}