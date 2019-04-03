#include<iostream>
#include<iomanip>
#include<algorithm>
using namespace std;
typedef struct st_paper
{
	int time;
	int value;
	double per_value;
}paper;
bool compare(paper m, paper n)
{
	return m.per_value > n.per_value;
}
int main()
{
	int n, max_time;
	while (cin >> n >> max_time)
	{
		if (n == 0 && max_time == 0)break;
		paper a[21];
		int	last_time=max_time;
		double now_value=0;
		for (int i = 1; i <= n; i++)
		{
			cin >> a[i].time >> a[i].value;
			a[i].per_value = (double)a[i].value / a[i].time;
		}
		sort(a + 1, a + n + 1, compare);
		for (int i = 1; i <= n; i++)
		{
			if (a[i].time <= last_time)
			{
				now_value += a[i].value;
				last_time -= a[i].time;
			}
			else
			{
				now_value += last_time*a[i].per_value;
				break;
			}
		}
		cout << fixed<<setprecision(2)<<now_value << endl;
	}

}