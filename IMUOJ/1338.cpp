#include<iostream>
using namespace std;
int main()
{
	int list[10],step=1;
	list[0] = 1;
	for (int i = 1; i < 10; i++)
	{
		list[i] = list[i - 1] + (++step);
	}
	int m, d;
	char t;
	while (cin >> m >> t >> d)
	{
		if (m == 0 && d == 0)break;
		if (m == 8)d += 31;
		int sum=0;
		for (int i = 0; i < 10; i++)
		{
			if (list[i] >= d)sum++;
		}
		cout << sum << endl;
	}
	return 0;
}