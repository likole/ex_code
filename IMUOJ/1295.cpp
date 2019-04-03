#include<iostream>
#include<map>
#include<cmath>
using namespace std;
int main()
{
	int n;
	while (cin >> n)
	{
		int *num = new int[n];
		map<int, int> abosolute;
		for (int i = 0; i < n; i++)
		{
			cin >> num[i];
		}
		for (int i = 1; i < n; i++)
		{
			int t = abs(num[i] - num[i - 1]);
			if (!abosolute.count(t)) abosolute[t] = 1;
		}
		int flag = 1;
		for (int i = 1; i < n; i++)
		{
			if (!abosolute.count(i))
			{
				flag = 0;
				break;
			}
		}
		if (flag)cout << "Jolly\n";
		else cout << "Not jolly\n";
	}
}