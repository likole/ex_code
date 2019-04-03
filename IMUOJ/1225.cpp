#include<iostream>
using namespace std;
struct Date_s
{
	int y, m, d, character;
};
int main()
{
	struct Date_s a[100];
	int index=0 , n;
	while(cin>>n)
	{
		char tmp;
		a[index].m = n;
		cin >> tmp >> a[index].d >> tmp >> a[index].y;
		a[index].character = a[index].y*10000 + a[index].m * 100 + a[index].d;
		index++;
	}
	for (int i = 0; i < index-1; i++)
	{
		for (int j = 0; j < index-1-i; j++)
		{
			if (a[j].character > a[j + 1].character)swap(a[j], a[j + 1]);
		}
	}
	for (int i = 0; i < index; i++)
	{
		printf("%02d/%02d/%04d\n", a[i].m, a[i].d, a[i].y);
	}
	return 0;
}