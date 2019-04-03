#include<iostream>
#include<cmath>
using namespace std;
int main()
{
	double vul, d;
	int time = 0, n = 1;
	cin >> vul >> d;
	while (vul > 0)
	{
		if (vul > n*d)
		{
			vul -= n*d;
			time += (++n);
		}
		else
		{
			time += ceil(vul / d);
			vul = 0;
		}
	}
	cout << time;
}