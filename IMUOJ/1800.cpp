#include<iostream>
#include<algorithm>
using namespace std;
int main()
{
	int t;
	cin >> t;
	for (int m = 0; m < t; m++)
	{
		//main
		int n,count=0;
		cin >> n;
		int *p = new int[n];
		for (int i = 0; i < n; i++)
		{
			cin >> p[i];
		}
		sort(p, p + n);
		int left = 0, right = n - 1;
		while (right - left + 1 > 3)
		{
			int plana = p[left] + p[left + 1] + p[right] + p[left + 1];
			int planb = p[right] + p[left] + p[right - 1] + p[left];
			count += (plana < planb ? plana : planb);
			right -= 2;
		}
		if (right - left + 1 == 3)
		{
			count = count + p[left] + p[left + 1] + p[left + 2];
		}
		else if (right - left + 1 == 2)
		{
			count = count + p[left + 1];
		}
		else
		{
			count += p[left];
		}
		cout << count << endl;
	}
}