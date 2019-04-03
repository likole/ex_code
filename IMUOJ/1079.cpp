#include<iostream>
using namespace std;
#include<set>
#include<map>
int main()
{
	set<int> zList;
	map<int, int> xCount;
	int m, n;
	cin >> m >> n;
	for (int i = 0; i < m; i++)
	{
		int x,z;
		cin >> x>>z;
		zList.insert(z);
		xCount[z] = x;
	}
	for (int i = 0; i < n; i++)
	{
		int x, z;
		cin >> x >> z;
		zList.insert(z);
		if (!xCount.count(z)) xCount[z] = 0;
		xCount[z] += x;
	}
	for (set<int>::reverse_iterator it = zList.rbegin(); it != zList.rend(); it++)
	{
		int t = xCount[*it];
		if (t!=0)
		{
			cout <<t << " " << *it << endl;
		}
	}
}